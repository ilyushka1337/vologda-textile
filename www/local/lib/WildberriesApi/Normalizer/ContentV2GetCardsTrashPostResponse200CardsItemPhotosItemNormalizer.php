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
    class ContentV2GetCardsTrashPostResponse200CardsItemPhotosItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('big', $data)) {
                $object->setBig($data['big']);
                unset($data['big']);
            }
            if (\array_key_exists('c246x328', $data)) {
                $object->setC246x328($data['c246x328']);
                unset($data['c246x328']);
            }
            if (\array_key_exists('c516x688', $data)) {
                $object->setC516x688($data['c516x688']);
                unset($data['c516x688']);
            }
            if (\array_key_exists('square', $data)) {
                $object->setSquare($data['square']);
                unset($data['square']);
            }
            if (\array_key_exists('tm', $data)) {
                $object->setTm($data['tm']);
                unset($data['tm']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('big') && null !== $object->getBig()) {
                $data['big'] = $object->getBig();
            }
            if ($object->isInitialized('c246x328') && null !== $object->getC246x328()) {
                $data['c246x328'] = $object->getC246x328();
            }
            if ($object->isInitialized('c516x688') && null !== $object->getC516x688()) {
                $data['c516x688'] = $object->getC516x688();
            }
            if ($object->isInitialized('square') && null !== $object->getSquare()) {
                $data['square'] = $object->getSquare();
            }
            if ($object->isInitialized('tm') && null !== $object->getTm()) {
                $data['tm'] = $object->getTm();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class => false];
        }
    }
} else {
    class ContentV2GetCardsTrashPostResponse200CardsItemPhotosItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('big', $data)) {
                $object->setBig($data['big']);
                unset($data['big']);
            }
            if (\array_key_exists('c246x328', $data)) {
                $object->setC246x328($data['c246x328']);
                unset($data['c246x328']);
            }
            if (\array_key_exists('c516x688', $data)) {
                $object->setC516x688($data['c516x688']);
                unset($data['c516x688']);
            }
            if (\array_key_exists('square', $data)) {
                $object->setSquare($data['square']);
                unset($data['square']);
            }
            if (\array_key_exists('tm', $data)) {
                $object->setTm($data['tm']);
                unset($data['tm']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('big') && null !== $object->getBig()) {
                $data['big'] = $object->getBig();
            }
            if ($object->isInitialized('c246x328') && null !== $object->getC246x328()) {
                $data['c246x328'] = $object->getC246x328();
            }
            if ($object->isInitialized('c516x688') && null !== $object->getC516x688()) {
                $data['c516x688'] = $object->getC516x688();
            }
            if ($object->isInitialized('square') && null !== $object->getSquare()) {
                $data['square'] = $object->getSquare();
            }
            if ($object->isInitialized('tm') && null !== $object->getTm()) {
                $data['tm'] = $object->getTm();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem::class => false];
        }
    }
}