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
    class ContentV2ObjectAllGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subjectID', $data)) {
                $object->setSubjectID($data['subjectID']);
                unset($data['subjectID']);
            }
            if (\array_key_exists('parentID', $data)) {
                $object->setParentID($data['parentID']);
                unset($data['parentID']);
            }
            if (\array_key_exists('subjectName', $data)) {
                $object->setSubjectName($data['subjectName']);
                unset($data['subjectName']);
            }
            if (\array_key_exists('parentName', $data)) {
                $object->setParentName($data['parentName']);
                unset($data['parentName']);
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
            if ($object->isInitialized('subjectID') && null !== $object->getSubjectID()) {
                $data['subjectID'] = $object->getSubjectID();
            }
            if ($object->isInitialized('parentID') && null !== $object->getParentID()) {
                $data['parentID'] = $object->getParentID();
            }
            if ($object->isInitialized('subjectName') && null !== $object->getSubjectName()) {
                $data['subjectName'] = $object->getSubjectName();
            }
            if ($object->isInitialized('parentName') && null !== $object->getParentName()) {
                $data['parentName'] = $object->getParentName();
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
            return [\Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class => false];
        }
    }
} else {
    class ContentV2ObjectAllGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subjectID', $data)) {
                $object->setSubjectID($data['subjectID']);
                unset($data['subjectID']);
            }
            if (\array_key_exists('parentID', $data)) {
                $object->setParentID($data['parentID']);
                unset($data['parentID']);
            }
            if (\array_key_exists('subjectName', $data)) {
                $object->setSubjectName($data['subjectName']);
                unset($data['subjectName']);
            }
            if (\array_key_exists('parentName', $data)) {
                $object->setParentName($data['parentName']);
                unset($data['parentName']);
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
            if ($object->isInitialized('subjectID') && null !== $object->getSubjectID()) {
                $data['subjectID'] = $object->getSubjectID();
            }
            if ($object->isInitialized('parentID') && null !== $object->getParentID()) {
                $data['parentID'] = $object->getParentID();
            }
            if ($object->isInitialized('subjectName') && null !== $object->getSubjectName()) {
                $data['subjectName'] = $object->getSubjectName();
            }
            if ($object->isInitialized('parentName') && null !== $object->getParentName()) {
                $data['parentName'] = $object->getParentName();
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
            return [\Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200DataItem::class => false];
        }
    }
}