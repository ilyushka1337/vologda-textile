<?php

namespace Placestart\WildberriesApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContentV2CardsRecoverPostBodyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nmIDs', $data)) {
                $values = [];
                foreach ($data['nmIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setNmIDs($values);
                unset($data['nmIDs']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nmIDs') && null !== $object->getNmIDs()) {
                $values = [];
                foreach ($object->getNmIDs() as $value) {
                    $values[] = $value;
                }
                $data['nmIDs'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class => false];
        }
    }
} else {
    class ContentV2CardsRecoverPostBodyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nmIDs', $data)) {
                $values = [];
                foreach ($data['nmIDs'] as $value) {
                    $values[] = $value;
                }
                $object->setNmIDs($values);
                unset($data['nmIDs']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nmIDs') && null !== $object->getNmIDs()) {
                $values = [];
                foreach ($object->getNmIDs() as $value) {
                    $values[] = $value;
                }
                $data['nmIDs'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem::class => false];
        }
    }
}